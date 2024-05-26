#El programa muestra y calcula el promedio

print('El programa calculara el promedio de tus 3 calificaciones\n')
nombre = input('Escribe tu nombre: ')
mat = float(input('Escribe tu calificaion de Matematicas: '))
fis = float(input('Escribe tu calificaion de Fisica: '))
quim = float(input('Escribe tu calificaion de Quimica: '))

'''
prioridad de operadores aritmeticos
() y ¨ primer lugar
* y / segundo lugar
+ - tercer lugar
'''

prom = (mat + fis + quim)/3

print(f'¨{nombre} tu promedio es: {round(prom, 2)}')