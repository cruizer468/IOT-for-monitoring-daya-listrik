#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <PZEM004Tv30.h>



PZEM004Tv30 pzem(D1, D2);

const char* ssid="Warnas ..";
const char* password="beliajadulu";



void setup() {

  Serial.begin(115200);
    pinMode(D5, OUTPUT);
  digitalWrite(D5, HIGH);
  delay(100);
  digitalWrite(D5, LOW);
  delay(100);
  digitalWrite(D5, HIGH);
  delay(100);
  digitalWrite(D5, LOW);
  
  WiFi.begin(ssid,password);
  while(WiFi.status() != WL_CONNECTED){
    Serial.println("try to connect");
    delay(1000);
  }
  digitalWrite(D5, HIGH);
  delay(1000);
  digitalWrite(D5, LOW);
  Serial.println(WiFi.localIP());
  Serial.println(ssid);
}



void loop() {
    delay(1000);
    float voltage = pzem.voltage();

    if(voltage != NAN){

        Serial.print("Voltage: "); Serial.print(voltage); Serial.println("V");

    } else {

        Serial.println("Error reading voltage");

    }



    float current = pzem.current();

    if(current != NAN){

        Serial.print("Current: "); Serial.print(current); Serial.println("A");

    } else {

        Serial.println("Error reading current");

    }



    float power = pzem.power();

    if(current != NAN){

        Serial.print("Power: "); Serial.print(power); Serial.println("W");

    } else {

        Serial.println("Error reading power");

    }



    float energy = pzem.energy();

    if(current != NAN){

        Serial.print("Energy: "); Serial.print(energy,3); Serial.println("kWh");

    } else {

        Serial.println("Error reading energy");

    }



    float frequency = pzem.frequency();

    if(current != NAN){

        Serial.print("Frequency: "); Serial.print(frequency, 1); Serial.println("Hz");

    } else {

        Serial.println("Error reading frequency");

    }



    float pf = pzem.pf();

    if(current != NAN){

        Serial.print("PF: "); Serial.println(pf);

    } else {

        Serial.println("Error reading power factor");

    }
  delay(100);
  String website = "http://kelompok5tekap2.000webhostapp.com/monitoringInsert.php?daya="+String(power)+"&arus="+String(current)+"&tegangan="+String(voltage);
  Serial.println(website);
  if (WiFi.status() == WL_CONNECTED){
    HTTPClient http;
    http.begin(website);
    int httpCode = http.GET();
    }
    digitalWrite(D5, HIGH);
    delay(100);
    digitalWrite(D5, LOW);
    Serial.println("Data Berhasil Di kirim");
    delay(60000);

}
