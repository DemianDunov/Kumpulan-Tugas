function openTask(filePath) {
  window.open(filePath, "_blank");
}

function downloadFile(fileName) {
  const link = document.createElement("a");
  link.href = fileName;
  link.download = fileName.split("/").pop();
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}
