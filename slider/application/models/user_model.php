<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(RS_PLUGIN_PATH . 'includes/globals.class.php');

/**
 * Nwdthemes Standalone Slider Revolution
 *
 * @package     StandaloneRevslider
 * @author		NWDthemes <nwdthemes@gmail.com>
 * @link		http://nwdthemes.com/
 * @copyright   Copyright (c) 2016. NWDthemes
 * @license     http://themeforest.net/licenses/terms/regular
 */
class User_model extends CI_Model {

    /*
     * Table name
     *
     */
    public $table = 'user';


    /**
     * Constructor
     */
    public function __construct() {
        $this->load->library('SaltCellar');
        $this->load->library('PasswordStorage');
    }

    /**
     * Check if there is admin user exists
     *
     * @return  boolean
     */
    public function exists() {
        return $this->db->count_all($this->table);
    }

    /**
     * Get user
     *
     * @param   int $id
     * @return	array
     */
    public function get($id) {
        return $this->db->where('id', $id)->get($this->table)->row_array();
    }

    /**
     * Login user
     *
     * @param  string   $identity
     * @param  string	$password
     * @return mixed
     */
    public function login($identity, $password) {

        $loginUser = false;
        if ( empty($identity) || empty($password) ) {
            return $loginUser;
        }

        $query = $this->db
            ->where('username', $identity)
            ->or_where('email', $identity)
            ->get( $this->table );

        if ($query->num_rows() > 0) {

            $user = $query->row_array();

            //TODO: remove this condition
            // password backwards compatiblity
            if ($password == $this->_decrypt($user['password'], $user)) {
                $salt = SaltCellar::getSalt(44, 50);
                $this->db
                    ->set('salt', $salt)
                    ->set('password', PasswordStorage::create_hash($salt . $password))
                    ->where('id', $user['id'])
                    ->update($this->table);
                $user = $this->db
                    ->where('id', $user['id'])
                    ->get($this->table)
                    ->row_array();
            }

            if (PasswordStorage::verify_password($user['salt'] . $password, $user['password'])) {
                $loginUser = $user;
            }
        }

        return $loginUser;
    }

    /**
     * Check email
     *
     * @param  string   $email
     * @return mixed
     */
    public function check_email($email) {
        $check  = false;
        $query = $this->db->where('email', $email)->get( $this->table );
        if ($query->num_rows() > 0) {
            $check = $query->row_array();
        }
        return $check;
    }

    /**
     * Update user
     *
     * @param	array   $data
     * @return	array
     */
    public function update($data) {
        $error = '';
        if ( ! $data['user_id'] ) {
            $error = __('No user id provided');
        } elseif ( ! $data['username'] || ! $data['email']) {
            $error = __('Username and Email address are required');
        } elseif ( strlen($data['username']) < 4) {
            $error = __("Username should be at least 4 characters long");
        } elseif ( $data['password'] && $data['password'] != $data['confirm_password']) {
            $error = __("New password don't match confirmed password");
        } elseif ( $data['password'] && strlen($data['password']) < 4) {
            $error = __("Password should be at least 4 characters long");
        }

        if (! $error) {

            $user = $this->get($data['user_id']);

            $user['username'] = $data['username'];
            $user['email'] = $data['email'];

            if ($data['password']) {
                $salt = SaltCellar::getSalt(44, 50);
                $user['salt'] = $salt;
                $user['password'] = PasswordStorage::create_hash($salt . $data['password']);
            }

            $this->db
                ->set($user)
                ->where('id', $user['id'])
                ->update( $this->table );
        }

        $result = array(
            'success'	=> empty($error),
            'message'	=> empty($error) ? __('Account have been updated') : $error
        );
        return $result;
    }

    /**
     * Decrypts the password.
     *
     * @deprecated
     * @param  string   $password
     * @param  array    $user
     * @return string
     */
    private function _decrypt($password, $user) {
        $ci = &get_instance();
        $ci->load->library('encrypt');
        $hash 	= $ci->encrypt->sha1($user['username'] . $user['salt']);
        $key 	= $ci->encrypt->sha1($ci->config->item('encryption_key') . $hash);
        return $ci->encrypt->decode($password, substr($key, 0, 56));
    }

}