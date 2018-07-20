<h2>File Upload Defend</h2>
<p>
任意檔案上傳可能造成攻擊<br/>
ex : php、html 程式類型檔案
</p>

<h3>/file-upload/index</h3>
<p>存放位置 => /FileUpload/*</p>

<h4>Tips</h4>
<ol>
<li>Model validator</li>
<li>getMimeType</li>
<li>else function</li>
</ol>

<h4>MIME 差異</h4>
<ul>
<li>.xls => [application/vnd.ms-excel, application/vnd.ms-office]</li>
<li>.csv => [text/csv, text/plain]</li>
<li>.ico => [image/vnd.microsoft.icon, image/x-icon]</li>
</ul>