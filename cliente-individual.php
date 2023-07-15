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
10)P.ID
11)P.requisitos -->


<? while($row2 = mysqli_fetch_row($re5)){ ?>  
<article class="portfolio-item  <?=$row2[7]?> pf-<?=$row2[3]?> clearfix">
	<div class="portfolio-image">
		<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
			<div class="flexslider">
				<div class="slider-wrap">
					<div class="slide"><a href="<?=$row2[5]?>"><img src="<?=$row2[4]?>"></a></div>
					<div class="slide"><a href="<?=$row2[5]?>"><img src="<?=$row2[6]?>"></a></div>
				</div>
			</div>
		</div>
		<div class="portfolio-overlay" data-lightbox="gallery">
			<a href="<?=$row2[4]?>" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
			<a href="<?=$row2[6]?>" class="hidden" data-lightbox="gallery-item"></a>
			<a href="portfolio-full.php?ID=<?=$row2[10]?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
		</div>
	</div>
	<div class="portfolio-desc">
		<h3><a href="portfolio-full.php?ID=<?=$row2[10]?>"><?=$row2[0]?></a></h3>
		<span><a href="#"><?= $row2[3] ?></a> <a href="#"><?=$row2[8]?></a> <? if ($row2[9] != "") {?>,<a href="#"><?=$row2[9]?></a><?}?></span>
		<p><?=$row2[1] ?></p>
		<ul class="iconlist">
			<li><i class="icon-ok"></i> <strong>Salida:</strong> <?=$row2[8]?><? if ($row2[9] != "") {?>, <?=$row2[9]?><?}?></li>
			<li><i class="icon-ok"></i> <strong>Destino:</strong> <?=$row2[3] ?></li>
			<li><i class="icon-ok"></i> <strong>Requisitos:</strong> <?=$row2[11]?></li>
		</ul>
		<a href="portfolio-full.php?ID=<?=$row2[10]?>" class="button button-3d noleftmargin">Anotate</a>
	</div>
</article>
<?}?>

