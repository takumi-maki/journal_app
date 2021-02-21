<form action="{{ action('PostsController@index') }}" method="get">
<div class="site-navbar py-2 js-sticky-header site-navbar-target" role="banner">
    <div class="container">
      <div class="d-flex align-items-center">
          <nav class="site-navigation position-relative" role="navigation">
            <ul class="site-menu">
              <li>
                <input class="nav-type" type="submit" name="type" value="all" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="book" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="business" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="daily" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="hobby" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="study" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="movie" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="society" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="sport" />
              </li>
              <li>
                <input class="nav-type" type="submit" name="type" value="travel" />
              </li>
            </ul>                                                                                                                                                                                                                                                                                         
          </nav>

        </div>
        <hr>
    </div>
</div>
</form>