// VARS
var logging = false
var normal_text = 'Tu nie ma żadnej wiadomości! napisz swoją, która będzie wyświetlona przez 8 godzin!'
var your_text = normal_text
var date = new Date()
var time_end = new Date().getTime()
var time = new Date()
var delay = 8
var time_since_last_change = null
var hour = 3600000

function SendData(text, ENDtime){
	console.log("sending data")
	let arr = {}
	arr.Text = text
	arr.ENDtime = ENDtime

    $.ajax({
    	method: 'POST',
        url: './send.php',
        data: arr,
        success: function(data) {
            console.log(data)
        }
    });
}

function update_text() {
    check_update()
    document.getElementById("text").innerHTML = your_text
}

function check_update () {
    date = new Date()
    time = new Date(time_end - date.getTime())
    // logs
    if (logging == true) {
        console.log(`delay: ${delay}`)
        console.log(`time to change: ${time.getHours()-1}:${time.getMinutes()}:${time.getSeconds()}`)
        console.log("============================================\n")
    }
    // if actual time is equal to end time
    
    if (date.getTime() < time_end) {
        document.getElementById("time").innerHTML = `pozostały czas: ${time.getHours()-1}:${time.getMinutes()}:${time.getSeconds()}`
        return false
    } else {
        document.getElementById("time").innerHTML = `Możesz napisać swoją wiadomość!`      
        document.getElementById("text").innerHTML = normal_text 
        return true
    }
}

function submit () {
    if (document.getElementById("button").value.trim() != "") {
        var text = document.getElementById("button").value
        document.getElementById("button").value = ""
        if (check_update()) {
            time_end = new Date(new Date().getTime() + (hour*delay)).getTime()
            your_text = text
            document.getElementById("button").value = ""
            SendData(your_text, time_end)
        }
        update_text()
    }  else {}
}

// ALL THAT'S GONNA REPEAT
function Repeat() {
    var x = setInterval(function() {
        check_update()
    }, 250)
}
Repeat()