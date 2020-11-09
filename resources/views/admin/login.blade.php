<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Goblin</strong> Inc.</a>
								</header>



							<!-- Section -->
              <section>
                <div class="row gtr-uniform">
                  <div class="col-6 col-12-small">
                    <h3>Admin Login</h3>
                    <form method="post" action="{{route('admin.auth')}}">
                      @csrf 
                      <div class="row gtr-uniform">
                        <div class="col-6 col-12-xsmall">
                          <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <div class="col-6 col-12-xsmall">
                          <input type="password" name="password" id="password" value="" placeholder="Password" />
                        </div>
      
                        <!-- Break -->
                        <div class="col-6 col-12-small">
                          <input type="checkbox" id="demo-copy" name="remember">
                          <label for="demo-copy">Remeber Password</label>
                        </div>
                        <!-- Break -->
                        <div class="col-12">
                          <ul class="actions">
                            <li><input type="submit" value="Admin Login" class="primary" /></li>
                          </ul>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>   
              </section>

						</div>
					</div>

			</div>

	</body>
</html>