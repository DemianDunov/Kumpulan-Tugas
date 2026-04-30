function openTask(page) {
  window.location.href = page;
}

function downloadFile(file) {
  const a = document.createElement("a");
  a.href = file;
  a.download = "";
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
}
