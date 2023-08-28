<!DOCTYPE html>
<html>

<head>
  <?php require 'template/pre-includes.php'?>
  <title>Location - Pragmatic Consulting, Inc</title>
  <meta name="description" content="Find us at our two locations: Portsmouth, NH; Belvidere, IL;">
</head>

<body>
  <div class="container-fluid">
    <?php require 'template/header.php'?>

    <section id="content" class="row justify-content-center">
      <main class="col-12 col-md-11 col-lg-9 px-3 pb-3 p-sm-4" id="location">
        <h2 class="content-title">Location</h2>

        <div class="row justify-content-center">
        	<div class="col-12 col-sm-4 offset-0 offset-sm-1 offset-lg-2">
            <div>
              <h3>Headquarters</h3>
            </div>

            <p>1 Greenleaf Woods Drive
              <br /> Suite 202
              <br /> Portsmouth, NH 03801</p>
            <p>
            	<strong>Phone</strong>: (603) 431-4461 <br/>
            </p>
        	</div>
        	<div class="col-12 col-sm-4 offset-0 offset-sm-1">
            <div>
              <h3>Mid-West</h3>
            </div>

            <p>Belvidere, IL</p>
            <p><strong>Phone:</strong> (815) 218-8135</p>
        	</div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-auto">
		        <p class="center"><strong>Office Location </strong></p>
		        <div class="center">
		          <iframe width="425" height="350" frame scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=1+Greenleaf+Woods+Drive++Unit+S+202++Portsmouth,+NH+03801&amp;ie=UTF8&amp;hq=&amp;hnear=1+Greenleaf+Woods+Dr,+Portsmouth,+New+Hampshire+03801&amp;t=p&amp;vpsrc=0&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
		          <br /><small><a href="https://maps.google.com/maps?hl=en&amp;q=1+Greenleaf+Woods+Drive++Unit+S+202++Portsmouth,+NH+03801&amp;ie=UTF8&amp;hq=&amp;hnear=1+Greenleaf+Woods+Dr,+Portsmouth,+New+Hampshire+03801&amp;t=p&amp;vpsrc=0&amp;z=13&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		        </div>
        	</div>
        </div>

        <table id="location-information" class="locations">
          <tr>
            <td style="width: 50%;">
            </td>
            <td style="width: 50%;">
            </td>
          </tr>
        </table>
      </main>
    </section>

    <footer id="footer" class="row justify-content-center">
      <?php require 'template/footer.php'?>
    </footer>
  </div>

  <?php require 'template/post-includes.php'?>
</body>

</html>