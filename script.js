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
var ret = ["fail przy zdobywaniu tej informacji. załatw se lepszy internet!", 999999999999999999999]

function SendData(text, Endtime){
	console.log("\nsending data")
	string_text = `${text}`
	Endtime_string = `${Endtime}`
	let arr = {'Text': text, 'Endtime': Endtime }
	console.log(`data expected: ${arr}`)
    $.ajax({
    	method: 'POST',
        url: 'send.php/',
        data: arr,
        success: function(data) {
            console.log(data)
        }, error: (error) => {
        	console.log(error)
        }
    });
}

function wait(ms)
{
    var d = new Date();
    var d2 = null;
    do { d2 = new Date(); }
    while(d2-d < ms);
}

function GetData(){
	ret = ["fail przy zdobywaniu tej informacji. załatw se lepszy internet!", 999999999999999999999]
	$.ajax({
		METHOD: 'POST',
		url: 'update.php/',
		data: {'nothing here': true},
		async: false,
		success: function(data) {
			ret = data.split(" | ")
		}
	})
	// AVERAGE 250 ms to get response
	return ret
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
    // if actual time is smaller to end time
    let text_from_server = GetData()
    text_from_server = text_from_server[0]
    if (date.getTime() < time_end && text_from_server == your_text) {
        document.getElementById("time").innerHTML = `pozostały czas: ${time.getHours()-1}:${time.getMinutes()}:${time.getSeconds()}`
        return false
    } else {
    	if (GetData()[1] > time_end) {
    		$your_text = GetData[0]
    		$time_end = GetData[1]
    		return false
    	} else {
			document.getElementById("time").innerHTML = `Możesz napisać swoją wiadomość!`
			document.getElementById("text").innerHTML = normal_text
			return true
        }
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
    }, 750)
}
Repeat()