window.alert("Welcome to my Biography! ** Farzam Koohi Ronaghi **");

var a = false;

function int_func()
{
  document.location = 'main_page.htm';
}

function Ski_func()
{
  document.location = 'skills_page.htm';
}


function hon_func()
{
  document.location = 'skills_page.htm#ach';
}


function con_func()
{
  document.location = 'contact_page.htm';
}

function sub()
{
  a = confirm('Are you sure of the accuracy of your information?');
  if (a == true)
  {
    window.alert("Successfuly submited!");
  }
  return a;
}
