<script>
    var i = 0;// start
    var images = [];
    var time = 3000;

    //images list
    images[0] = 'latar1.png';
    images[1] = 'latar2.png';
    images[2] = 'latar3.jpg';

    //change Image
    function ubah(){
        document.slide.src = images[i];
    
        if(i< images.length - 1){
            i++;
        }else{
            i=0;
        }
    
        setTimeout("ubah()", time);
    }

    window.onload = ubah;


</script>
<img name="slide" width="400" height="200">