var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    if (count % 2 == 0) { 
        document.getElementById("demo").innerHTML = "";
	} else {
        var img = document.createElement("img");
        img.src = "https://sun9-12.userapi.com/impg/VMvp1qXzuZ91FB2LdmSy-_KHQh1XOdzharvbAg/UMcARJYWrdQ.jpg?size=807x543&quality=95&sign=4e7672de57c260f666cc823c7914eae7&c_uniq_tag=PLxVU2KEcHrpxggPAMTDX2sRHbCq_vJCGqO1lgBhM54&type=album";
        document.getElementById("demo").appendChild(img);
	}
    
}





