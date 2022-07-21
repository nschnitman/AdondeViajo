select P.titulo, P.descripcion, C.nombre, D.pais, P.imagen, P.link from portfolio as P 
inner join cliente as C on C.id = P.clienteID
inner join destino as D on D.id = P.destinoID