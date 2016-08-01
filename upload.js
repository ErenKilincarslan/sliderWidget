$(function(){



    $("body").on("click",".arti",function(){ //eğer classı arti olana tıklanırsa

        var i=$(".eksi").size();//sayfadaki eksi clasına sahip objelerinsayısını al

        if(i<5){//eğer eksi sayısı 5 ten az ise

            $(".iler").append('<div class="i_ana">  <input type="file" name="resim[]" />    <div class="eksi">-</div>   </div>');

            //sayfaya bir tane daha file koy

        }

    });



    $("body").on("click",".eksi",function(){//eksiye tıklanırsa

        var index=$(this).index(".eksi");//o anki tıklanan eksiyi seçiyoruz

        var i=$(".eksi").size();//eksi sayısını alıyoruz.

        if(i>1){//eğer 1 den çok eksi var ise

            $(".i_ana:eq("+index+")").remove();//tıklanan eksinin içindeki file elemanını siliyoruz.

        }

    });



    $("#yukle").submit(function(){//eğer form gönderilirse.

        //loading gifini göster

        $("#iframe").load(function(){//eğer iframe yüklendiyse

            var veri=$(this).contents().find("body").html();//iframenin içeriğini al

            //ve sayfadaki fileleri silip yerine 1 tane yeni file koy
        })

    });



});
/**
 * Created by eka on 26.07.2016.
 */
