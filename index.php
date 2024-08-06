<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
  margin:0px;
  pading:0px;
}


.flex-container {
  display: flex;
  height:100%;
  flex-wrap: wrap;
  font-size: 30px;
  text-align: center;
}

.flex-item-left {
  background-color: gray;
  padding: 10px;
  flex: 10%;
}

.flex-item-right {
  background-color: lightgray;
  padding: 10px;
  flex: 50%;
}

/* Responsive layout - makes a one column-layout instead of a two-column layout 
@media (max-width: 800px) {
  .flex-item-right, .flex-item-left {
    flex: 100%;
  }
}*/
</style>
</head>
<body>

<div class="flex-container">
  <div class="flex-item-left"><p>idfnjdvsdnksd<p><p><br>yusdbsdbsdihsduui</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br></div>
  <div class="flex-item-right"><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p><br><p>udfudsuisdiu</p></div>
</div>

</body>
</html>

