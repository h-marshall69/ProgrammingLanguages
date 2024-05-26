contador =0
suma = 0
numero =0
while True:
    numero=int(input('Escribe un numero para sumar'
                     'Ingresa -1 para salir: '))
    if(numero==-1):
        break
    suma += numero
    contador+=1
if(contador>0):
    promedio=suma/contador
    print('La suma de los  números es: ', suma)
    print('El total de números introducidos es: ',contador)
    print('El promedio de los número ingresados es: ', promedio)
else:
    print('No se ingresaron numeros validos')