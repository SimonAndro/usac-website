/* Style the tab */
.tab {
  background-color: #3e7fe8;
  color: #fff;
  margin-left: 14px;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 10px;
    transition: 0.3s;
    font-size: 17px;
    color: #fff;
    font-weight: bold;
    box-shadow: 0 0 10px 5px #5998ff;
    border-radius: 10px;
    margin-top: -15px;
    margin-right: 15px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #7aadff;
  color: #fff;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #7aadff;
  color: #fff;
}

/* Style the tab content */
.tabcontent {
  padding: 6px 12px;
  border-top: none;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}