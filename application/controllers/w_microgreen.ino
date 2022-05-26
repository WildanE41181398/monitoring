#include <HTTPClient.h>
#include <WiFi.h>

const char *ssid = "Wifi.id";
const char *pass = "admin1234";

String kirimandata;

void setup()
{
    Serial.begin(9600);
    // KONEKSI KE WIFI
    WiFi.begin(ssid, pass);
    while (WiFi.status() != WL_CONNECTED)
    {
        Serial.print(".");
        delay(500);
    }
    Serial.print(" Terhubung ke : ");
    Serial.println(ssid);
}

void loop()
{
  // CEK KONEKSI KE WEB
    while(Serial.available() > 0)
    {
        kirimandata = Serial.readStringUntil('\0');
        Serial.println(kirimandata);
        String Link;
        HTTPClient http;
        Link = "http://localhost/monitoring/user/C_monitoring" + String(kirimandata);
        Link.trim();
        http.begin(Link);
        http.GET();
        http.end();
        delay(5000);
    }
}
/*
unsigned long curMillis = millis();
    if(curMillis - prevMillis >= interval)
    {
        prevMillis = curMillis;
        // CEK KONEKSI KE WEB
        WiFiClient client;
        const int port = 80;
        if (!client.connect(host, port))
        {
            Serial.println("Belum koneksi ke web");
            return;
        }
        String Link;
        HTTPClient http;
        Link = "http://" + String(host) + "/cabai/public/ppm/min";
        http.begin(client, Link);
        http.GET();
        String statuss = http.getString();
        if (statuss == "" || statuss == "0")
        {
            Serial.println("Belum mendapatkan data ppm");
            return;
        }
        int minim = statuss.toInt();
//        Serial.print("ppm min : ");
//        Serial.println(minim);
        http.end();
        String Lank;
        Lank = "http://" + String(host) + "/cabai/public/ppm/max";
        http.begin(client, Lank);
        http.GET();
        String maks = http.getString();
        if (maks == "" || maks == "0")
        {
            Serial.println("Belum mendapatkan data ppm max");
            return;
        }
        int maksim = maks.toInt();
//        Serial.print("ppm max : ");
//        Serial.println(maksim);
        String kirim = minim +"~"+ maksim;
        Serial.println(kirim);
        http.end();
    } 
*/