# SistemInteligentDeAcces
&nbsp;&nbsp; This project represents an intelligent biometric attendance access system that utilizes the ESP8266 development board, an 0.96" OLED Display, and a fingerprint sensor. <br>

<u><b>Required Components</b></u> <br>
To implement this system, you will need the following components: <br>
-ESP8266 development board <br>
-0.96" OLED Display <br>
-Fingerprint sensor compatible with ESP8266 <br>
-Breadboard and connecting wires <br>
-Power supply (USB cable for powering the ESP8266 board) <br>

<u><b>Setup</u></b><br>
-Connect all the components following the specific instructions and required connections. <br>
-Download and install the Arduino IDE (https://www.arduino.cc/en/software). <br>
-Open the Arduino IDE and install the necessary libraries: <br>
    &nbsp;&nbsp;-ESP8266 core for Arduino - Make sure you select the ESP8266 board in Tools > Board. <br>
    &nbsp;&nbsp;-Adafruit GFX Library for graphics control of the LCD. <br>
    &nbsp;&nbsp;-Adafruit SSD1306 Library for communication with the SSD1306-based LCD. <br>
    &nbsp;&nbsp;-Adafruit Fingerprint Sensor Library for the fingerprint sensor. <br>
-Depending on the hardware connections you made, modify the pin definitions in the source code to match your configuration. <br>
-Upload the code to the ESP8266 board using the "Upload" function in the Arduino IDE. <br>
-After successful upload, you should see debug messages on the serial console indicating the system initialization and fingerprint sensor status. <br>
-Test the functionality of the access system. Use the fingerprint sensor to register and authenticate fingerprints. The appropriate messages will be displayed on the LCD. <br>

&nbsp;&nbsp; Thank you, and I hope you have a pleasant experience with this intelligent access system!
