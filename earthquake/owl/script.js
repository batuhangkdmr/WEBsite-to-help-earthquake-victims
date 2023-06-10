var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true, //Karuselin sonsuz döngüde dönmesini sağlar, yani son slayttan ilk slayta geçildiğinde tekrar başa döner.
    nav:true,//Karusel için gezinme düğmelerini (önceki/sonraki) gösterir.
    margin:10, //Slaytlar arasındaki boşluğu belirler.
    
    //Karuselin duyarlılığını tanımlar, yani farklı ekran genişliklerinde farklı slayt sayıları kullanır. Örneğin, 0-599 piksel aralığında 1 slayt, 600-959 piksel aralığında 3 slayt, 960-1199 piksel aralığında 5 slayt, 1200 pikselden büyük ekranlarda ise 6 slayt gösterir.
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1200:{
            items:6
        }
    }
});

// Fare tekerleği üzerindeki bir olayı dinler. .owl-stage sınıfına sahip element içinde fare tekerleği olayı gerçekleştiğinde aşağıdaki işlevi tetikler.
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();//Fare tekerleği olayının varsayılan davranışını engeller, böylece sayfanın kayması engellenir
});


