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
11)D.pf -->


<? while($row = mysqli_fetch_row($re2)){ ?>  
<article class="portfolio-item <?=$row[7]?> pf-<?=$row[11]?>">
<div class="portfolio-image">
	<div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
		<div class="flexslider">
			<div class="slider-wrap">
				<div class="slide"><a href="../<?=$row[5]?>"><img src="../<?=$row[4]?>" alt="<?=$row[0]?>"></a></div>
				<div class="slide"><a href="../<?=$row[5]?>"><img src="../<?=$row[6]?>" alt="<?=$row[0]?>"></a></div>
			</div>
		</div>
	</div>
	<div class="portfolio-overlay" data-lightbox="gallery">
		<a href="../<?=$row[4]?>" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
		<a href="../<?=$row[6]?>" class="hidden" data-lightbox="gallery-item"></a>
		<a href="../portfolio-full.php?ID=<?=$row[10]?>" class="right-icon"><i class="icon-line-ellipsis"></i></a>
	</div>
</div>
<div class="portfolio-desc">
	<h3><a href="../<?=$row[5]?>"><?=$row[0]?></a></h3>
	<span><a href="#"><?=str_replace("ñ", "&ntilde;", $row[3]) ?></a>, <a href="#"><?=$row[8]?></a> <? if ($row[9] != "") {?>,<a href="#"><?=$row[9]?></a><?}?></span>
</div>
</article>
<?}?>