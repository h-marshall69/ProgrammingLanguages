#El programa evaluara la esatura y si la estatura es menor que 160 cms imprimira: Eres estatura baja
#Si esta entre 160 y entre 175 cms imprimira: Eres estatura mediana si es mayor a 175 cms imprimira: Eres alto

nombre=input('Escribe tu nombre: ')
estatura=int(input('escribe tu estatura en cm: '))

if (estatura<160):
    print(f'{nombre} Eres de estatura baja...')
    print(nombre, 'Eres de estatura baja',nombre,'otro')
    print(f'{nombre} texto {nombre} texto2 {nombre}')

if (estatura>=160) and (estatura<=175):
    print(f'{nombre} Eres de estatura mediana...')

if(estatura>175):
    print(f'{nombre} Eres de estatura alta...')