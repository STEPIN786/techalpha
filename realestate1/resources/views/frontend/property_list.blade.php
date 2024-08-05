<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <meta http-equiv="Expires" content="30" />
  <meta name="author" content="luckee Properties">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Residential Properties in Kondhwa, Pune | Residential Projects in Kondhwa, Pune | Projects in Pune</title>
  <link rel="shortcut icon" href="images/fav1.png" />
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <meta name="Keywords" content=" Residential Properties in Kondhwa Pune, Residential Projects in Kondhwa Pune, Projects in Pune, Real Estate Consultant in Kondhwa Pune, Real Estate Agents in Pune, Property Dealers, Brokers in Pune, Property Consultants in Pune, Real Esate Broker in Kondhwa, Pune ">
  <meta name="description" content="Get information and details about the best residential projects in Kondhawa, residentials projects in NIBM Road, residentials projects in Undri Pune">
  @include('frontend.include.header')
  <body>
    <section class="subheader">
      <div class="container">
        <h1>Residential Projects</h1>
        <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i>
          <a href="#" class="current">Residential Projects</a>
        </div>
        <div class="clear"></div>
      </div>
    </section>
    <section class="module" style="background-color:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="property-listing-header">
              <span class="property-count left">{{ $property_count }} properties found</span>
              <form action="" method="get" class="right">
                <select name="sort_by" onchange="this.form.submit();">
                  <option value="recent" {{ ($sortby == 'recent') ? 'selected' : '' }}>Recent</option>
                  <option value="old" {{ ($sortby == 'old') ? 'selected' : '' }}>Old</option>
                </select>
              </form>
              <div class="clear"></div>
            </div>
            <!-- end property listing header -->
            <div class="row">
              @foreach($list as $row)
              <div class="col-lg-6 col-md-6">
                <div class="property shadow-hover">
                  <a href="{{ $row->detail_link }}" class="property-img">
                    <div class="img-fade"></div>
                    <!--<div class="property-price">RS. 1.45cr nego </div>-->
                    <div class="property-color-bar"></div>
                    <img src="{{ $row->property_images }}" alt="Rental properties" />
                  </a>
                  <a href="callto:+91{{ $row->phone }}" class="btn default_btn">call us to get price</a>
                  <div class="property-content">
                    <div class="property-title">
                      <h4>
                        <a href="{{ $row->detail_link }}">{{ $row->title }} </a>
                      </h4>
                      <p class="property-address">
                        <i class="fa fa-map-marker icon"></i>{{ $row->address }}
                      </p>
                    </div>
                    @if(false)
                    <table class="property-details">
                      <tr>
                        <td>
                          <i class="fa fa-bed"></i> 2 Beds
                        </td>
                        <!--<td><i class="fa fa-tint"></i> 2 Baths</td>-->
                        <td>
                          <i class="fa fa-expand"></i> 1480 Sq Ft
                        </td>
                      </tr>
                    </table>
                    @endif
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-- end listing -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
  </body>
</html>
@include('frontend.include.footer')