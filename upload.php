<?php 

	session_start(); 
	$_SESSION['valid'] = true;
	$_SESSION['timeout'] = time();
		$resimler = array();
		$boyut=1000000;	//max dosya boyutu

		$tipler=array("image/png" , "image/jpg");	//desteklenen dosya türleri

		$ds=@count($_FILES["resim"]["name"]);	//gönderilen dosya sayısı

		if(($ds>5) and ($ds<1)){	//eğer en az 1 veya en çok 5 değilse işlem yapma

			die('<div class="i_ana" style="border:1px solid red;">  Yükleme miktarını aşıyorsunuz. </div>');
		}else{

			for($i=0;$i<$ds;$i++){	//hiçbir sorun yoksa for ile tek tek resimleri alıyoruz.

				if(!empty($_FILES["resim"]["name"][$i])){	//boş kontrolü

				if(in_array($_FILES["resim"]["type"][$i],$tipler)){	//tip kontrolü


					$isim=substr(md5(rand(0,999999999)),0,10);	//rasgele isim

					$uzanti=substr($_FILES["resim"]["name"][$i],-4,4);	//uzantıyı alma

					if($uzanti==".png" || $uzanti== ".jpg"){	//uzantı kontrolü

						if($_FILES["resim"]["size"][$i]>$boyut){	//dosya boyutu kontrolü

							echo '<div class="i_ana" style="border:1px solid red;">  Boyutu 1 mb tan çok. </div>';

							continue;

						}else{

							$dizin="img/".$isim.$uzanti;	//hiç bir sorun yoksa dosyayı upload et

							if(move_uploaded_file($_FILES["resim"]["tmp_name"][$i],$dizin)){
								array_push($resimler,$dizin);
								echo '<div class="i_ana"><a href="'.$dizin.'"><div class="git">'.$dizin.'</div></a>	</div>';
							}

						}

					}else{

						echo '<div class="i_ana"  style="border:1px solid red;">  Sadece .png yükleyebilirsiniz. </div>';

						continue;

					}

				}else{

						echo '<div class="i_ana"  style="border:1px solid red;">  Sadece .png yükleyebilirsiniz. </div>';

						continue;

				}

				}else{

					echo '<div class="i_ana" style="border:1px solid red;">  Alan Boş. </div>';

					continue;

				}

			}

		}
		$sum_width=0;
		$sum_height=0;
		$images = array();
		$array_lenght = count($resimler);
		for ($i=0;$i<$array_lenght;$i++){
			$info = array();
			$info = getimagesize($resimler[$i]);
			for ($j=0; $j <2 ; $j++) { 
				$images[$i][$j] = $info[$j];
			}
		}
		for ($i=0; $i <$array_lenght; $i++) { 
			$sum_width += $images[$i][0];
        	$sum_height += $images[$i][1];
		}
		$average_width = round($sum_width / $array_lenght);
    	$average_height = round($sum_height / $array_lenght);
    	$dimensions = array($average_width , $average_height);
		$_SESSION['dimensions'] = $dimensions;
		$_SESSION['resimler'] = $resimler;
?>