<div class="my_nav">
  <div class="contact">
      <span>Dott.ssa Ornella Giannone</span>
      <span>Tel. +39 3496376947</span> 
      <span><a href="mailto:giannone.ornella@libero.it">giannone.ornella@libero.it</a></span> 
  </div>
  <div class="nav_item">  
    <div class="navbar-left">      
        <a href="{{ route('home') }}"><img src="/images/logo.png" alt="logo"></a>
    </div>
    <div class="navbar-right">
        <ul class="menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('chiSono') }}">Chi sono</a></li>
            <li><a href="{{ route('aChiMiRivolgo') }}">Aree di attività</a></li>
            <li><a href="{{ route('aChiMiRivolgo') }}">Siti amici</a></li>
            <li><a href="{{ route('contatti') }}">Contatti</a></li>
        </ul>
        <div class="dropdown-menu">
          <i class="fas fa-bars toggle-dropdown"></i>
          <i class="fas fa-times toggle-dropdown hide"></i>
          <div class="dropdown-content hide">
            <ul class="menu">
              <li><a href="{{ route('home') }}">Home</a></li>  
                <li><a href="{{ route('chiSono') }}">Chi sono</a></li>
                <li><a href="{{ route('aChiMiRivolgo') }}">Cosa faccio</a></li>
                <li><a href="{{ route('aChiMiRivolgo')}}">A chi mi rivolgo</a></li>
                <li><a href="{{ route('contatti')}}">Contatti</a></li>
            </ul>
          </div>
        </div>
    </div>
  </div>

    
</div>
