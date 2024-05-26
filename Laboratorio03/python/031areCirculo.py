#Programa que calcula y muestra el area de un circulo, tiene como parámetro el radio 
# y retorna el area calculada.

import math
radio= (float(input('Escribe el radio del circulo y calcular su area: ')))
area = math.pi*radio**2
print('El area del circulo es: ',round (area,1))