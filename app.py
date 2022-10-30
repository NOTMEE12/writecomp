from flask import Flask

your_text = None
time_end = 0

app = Flask(__name__)

@app.route("/")
def home_view():
    with open("home.html", "r") as html:
        return html.read()

