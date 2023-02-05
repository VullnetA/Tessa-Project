<style>


  .button-dalje {
    background: #f53f85;
    border: 1px solid #f53f85;
    border-radius: 6px;
    box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: "Cabin";
    font-size: 15px;
    font-weight: 650;
    line-height: 1px;
    min-height: 35px;
    outline: 0;
    padding: 12px 14px;
    text-align: center;
    text-rendering: geometricprecision;
    text-transform: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    vertical-align: middle;
  }
  
  .button-dalje:hover,
  .button-dalje:active {
    background-color: initial;
    background-position: 0 0;
    color: #f53f85;
  }
  
  .button-dalje:active {
    opacity: .5;
  }
  .button-dalje{
    position:absolute;
    right:10%; 
    top: 2%;
    
  }
  
  
  </style>
  
  <li>
    <button class="button-dalje" role="button">
      <span href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</span>
    </button>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?>                     
    </form>
    </li>