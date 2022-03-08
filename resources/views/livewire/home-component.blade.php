<div>
    <style>
        #map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}

    </style>
    <div class="page-content">
        <div class="container-fluid">
          <!-- end row -->

            <!-- end row -->

            
            <!-- end row -->
            <!-- Check if the user have login already here -->
            @auth
            <!-- Then show this here -->
             <div class="alert alert-info fade show">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Hi,</strong> You have successfully login to MendSwap management system <a href="#" class="alert-link">View DASHBOARD</a> you can access your 
                <a rel="nofollow" href="#" target="_blank" class="alert-link">Profile here</a>.                
            </div>
            @else  
            <!-- Else show this here -->
            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">MendSwap Location</h4>
                            <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Nigeria&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                <a href="https://mendswap.com/">MendSwap Website</a>
                            </div>
                            <style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}
                                </style>
                        </div>
                        </div>
                    </div>
                </div>

                
            </div>
            @endif
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
</div>

<script>
    // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.036 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

</script>
