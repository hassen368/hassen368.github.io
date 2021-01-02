$( document ).ready(function() {
  if (sessionStorage.getItem("reloads")) {
    x=Number(sessionStorage.getItem("reloads"))
    sessionStorage.setItem("reloads",x+1)
  }
  else{
    sessionStorage.setItem("reloads",0)
  }
  alert(`Vous avez visiter la page ${sessionStorage.getItem("reloads")} fois`)
});
 