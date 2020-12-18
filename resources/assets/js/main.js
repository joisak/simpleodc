console.log('File `app.js` loaded!')


var mobileMenu = document.querySelector('#mobile-menu'),
    mobileIcon = document.querySelector('#nav-icon3'),
    header = document.querySelector('#header');

mobileIcon.addEventListener('click', function(){
    // this.classList.toggle('open');
    // console.log('log');
    // if(mobileMenu.classList.contains('show')) {
        
    // } else {
    //     console.log('no');
    // }
    // mobileMenu.classList.toggle('show');
    if(mobileMenu.className == "hide")
        mobileMenu.className = "show";
    else
        mobileMenu.className = "hide";
})


window.addEventListener('scroll', scrolling, scrolling());


function scrolling() {
    var mainContent = document.getElementById('main-content'),
    distanceToTop = mainContent.getBoundingClientRect().top,
    distans = -20;

    distanceToTop > distans ? header.classList.remove('dark') : header.classList.add('dark');
    
 }


function initMapi() {
    const myLatLng = { lat: 57.703939075267186, lng: 11.969396714040105};
 
     if(document.getElementById('map')) {
        let map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 15,
            mapId: '2386fbe90deb53ba',
            disableDefaultUI: true,
            styles: [
              {
                  featureType: 'transit',
                  elementType: 'labels.icon',
                  stylers: [{ visibility: 'off' }]
              },
              {
                  featureType: 'poi',
                  stylers: [{ visibility: 'off' }]
              },
              {
                  featureType: 'road',
                  stylers: [{ visibility: 'off' }]
              },
            ],
        });
    
        var icon = {
            path: "M 24 0 c -9.8 0 -17.7 7.8 -17.7 17.4 c 0 15.5 17.7 30.6 17.7 30.6 s 17.7 -15.4 17.7 -30.6 c 0 -9.6 -7.9 -17.4 -17.7 -17.4 Z",
            fillColor: '#009fc4',
            fillOpacity: 1,
            anchor: new google.maps.Point(5,50),
            strokeWeight: 0,
            scale: 0.5
        }
    
        new google.maps.Marker({
          position: myLatLng,
          map,
          title: "Hello World!",
          icon: icon
        });
    
        
    
     google.maps.Map.prototype.clearMarkers = function() {
        for(var i=0; i < this.markers.length; i++){
            this.markers[i].setMap(null);
        }
        this.markers = new Array();
    };
     }
        
    
  
  }

  if(document.getElementById('map')){
    document.addEventListener("DOMContentLoaded", function(event) {
        initMapi();
        });
  }
