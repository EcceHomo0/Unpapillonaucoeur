VANTA.CLOUDS({
    el:"#nuages",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 0,
    minWidth: 0,
    speed: 0.50
  })
  
  function ouvrirMenuBurger()
  {
    document.querySelector('#LiensBurger').classList.add('open');
  }
  
  function fermerMenuBurger()
  {
    document.querySelector('#LiensBurger').classList.remove('open');
  }