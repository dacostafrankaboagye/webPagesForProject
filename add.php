

<!DOCTYPE html>
 <html>

 <?php include("header.php"); ?>


 <section class="container grey-text">
     <h4 class="center">Current Level Data</h4>
     <div>
        <a class="waves-effect waves-light btn-large" id="fff"><i class="material-icons left">cloud</i>Customer 1</a>
        <div id="customer1"style="padding: 2px;">
            <p>Customer 1 Data</p>
            
        </div>
     </div>
     <br>
     <div>
        <a class="waves-effect waves-light btn-large" id="bbb"><i class="material-icons left">cloud</i>Customer 2</a>
        <div id="customer2" style="padding: 2px;">
            <p>Customer 2 Data</p>
        </div>
         
     </div>
     

 </section>

<script type="text/javascript">


var btn = document.getElementById("fff");
btn.addEventListener("click", function() {
    const xhttp=new XMLHttpRequest();
    xhttp.onload=function(){
        document.getElementById("customer1").innerText=this.responseText;
    }
    xhttp.open("GET", "retrieve.php?customer_number=1");
    xhttp.send();            
}, false);

var bt = document.getElementById("bbb");
bt.addEventListener("click", function() {
    const xhttp=new XMLHttpRequest();
    xhttp.onload=function(){
        document.getElementById("customer2").innerText=this.responseText;
    }
    xhttp.open("GET", "retrieve.php?customer_number=2");
    xhttp.send();            
}, false);


    </script>

 <?php include("footer.php"); ?>
 </body>
 </html>