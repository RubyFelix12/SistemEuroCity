.navbar-nav>li>.dropdown-menu {
    margin-top: 6px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    left: 50%;
    right: auto;
    text-align: left;
    transform: translate(-50%, 0);
}

.dropdown-menu:before {
  position: absolute;
  top: -7px;
  left: 50%;
  right: auto;
  display: inline-block;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-left: 7px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  content: '';
}