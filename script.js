diff --git a/C:\Users\DOA\Documents\Codex\2026-04-30\buatlah-sebuah-code-yang-cocok-untuk\script.js b/C:\Users\DOA\Documents\Codex\2026-04-30\buatlah-sebuah-code-yang-cocok-untuk\script.js
new file mode 100644
--- /dev/null
+++ b/C:\Users\DOA\Documents\Codex\2026-04-30\buatlah-sebuah-code-yang-cocok-untuk\script.js
@@ -0,0 +1,12 @@
+function openTask(filePath) {
+  window.open(filePath, "_blank");
+}
+
+function downloadFile(fileName) {
+  const link = document.createElement("a");
+  link.href = fileName;
+  link.download = fileName.split("/").pop();
+  document.body.appendChild(link);
+  link.click();
+  document.body.removeChild(link);
+}
