/*
  If someone accesses the page using http instead of https, redirect to https.
  Also, if someone accesses the page from pragmatic.net, redirect to pragmaticconsulting.com
*/
if (
  (document.location.hostname == "pragmatic.net" || document.location.hostname == "pragmaticconsulting.com") &&
  document.location.protocol != "https:"
) {
  document.location.href = "https://pragmaticconsulting.com" + document.location.pathname;
}

/*
  Code for Google Tag Manager, requires that <script src="https://www.googletagmanager.com/gtag/js?id=UA-29687620-5" async></script> be added
*/
window.dataLayer = window.dataLayer || [];
function gtag() {
  dataLayer.push(arguments);
}
gtag("js", new Date());

gtag("config", "UA-29687620-5");
