let ok = document.getElementById("ok").addEventListener("click", function () {
  name();
});
let ko = document.getElementById("ko").addEventListener("click", function () {
    ve();
  });

function name() {
  let ok = document.getElementById("ok");
  let ko = document.getElementById("ko");
  let an = document.getElementById("an");
  let h3 = document.getElementById("h3");
  let h4 = document.getElementById("h4");
  ok.style.display = "none";
  an.style.display = "flex";
  ko.style.display = "flex";
  ko.innerHTML="-";
  h3.innerHTML = "<h3>vlluon</h3>";
  h4.innerHTML = "<h4>vlluon</h4>";
}
function an() {
  let an = document.getElementById("an");
  an.style.display = "none";
}
function ve() {
    let ok = document.getElementById("ok");
    let ko = document.getElementById("ko");
    let an = document.getElementById("an");
    an.style.display = "none";
    ok.style.display = "flex";
    ko.style.display = "none";
}
