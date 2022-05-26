#include <DHT.h>
DHT dht(2, DHT11); //Pin, Jenis DHT
float kelembaban;
const int SoilSensor = A0;

void setup(){
 Serial.begin(9600);
 dht.begin();
}

void loop(){
 kelembaban = ambilkel();
 Serial.println(kelembaban);
 delay(1000);
}

float ambilsuhu(){
  float suhu = dht.readTemperature();
  Serial.println(suhu);
  return suhu;
}


float ambilkel()
{
  float kelembabanTanah;
  int hasilPembacaan = analogRead(SoilSensor);
  kelembabanTanah = (100 - ((hasilPembacaan/1023.00)*100));
  return kelembabanTanah;
}

if (suhu >= 24)
    {
        m_suhu_dngin = 0;
    }
    else if (23 < suhu && suhu <24
    {
        m_suhu_dngin = 24- suhu) / 24- 23);
    }
    else if (suhu <= 23)
    {
        m_suhu_dngin = 1;
    }