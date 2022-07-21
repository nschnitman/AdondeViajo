<!-- Orden de los Row[] : 
0)P.titulo 
1)P.descripcion
2)C.nombre 
3)D.pais 
4)P.imagen 
5)P.link
6)P.imagen2
7)P.filtro 
8)P.salida1
9)P.salida2
10)P.ID -->
<? while($row = mysql_fetch_row($re3)){ ?>  
<div class="oc-item">
	<div class="iportfolio">
		<div class="portfolio-image">
			<a href="<?=$portfull?><?=$row[10]?>">
				<img src="<?=$row[4]?>" alt="<?=str_replace("ñ", "&ntilde;", $row[0]) ?>">
			</a>
			<div class="portfolio-overlay" data-lightbox="gallery">
				<a href="<?=$row[4]?>" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
				<a href="<?=$row[6]?>" class="hidden" data-lightbox="gallery-item"></a>
				<a href="<?=$portfull?><?=$row[10]?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
			</div>
		</div>
		<div class="portfolio-desc">
			<h3><a href="<?=$portfull?><?=$row[10]?>"><?=str_replace("ñ", "&ntilde;", $row[0]) ?></a></h3>
			<span><a href="#"><a href="#"><?=$row[8]?></a><?if($row[9]!=""){?>, <a href="#"><?=$row[9]?></a><?}?></span>
		</div>
	</div>
</div>
<?}?>