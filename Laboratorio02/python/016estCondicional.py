pesos=int(input('Escribe la cantidad en pesos Mexicanos: '))

opcion=int(input('\nA cual moneda deseas convertir: '
				'\n1. Dolares $17'
				'\n2. Soles Peruanos $4\n'))

mensaje1='La cantidad convertida en Dolares es:"'

mensaje2='La cantidad convertida en Soles Peruanos es:'

ancho= 80

if (opcion==1):
	total=pesos/17
	mensajel = mensaje1.center(ancho)
	print (mensajei, round(total,4))

elif(opcion==2):
	total=pesos/4
	mensaje2=mensaje2.center(ancho)
	print (mensaje2, round(total,4))

else:
	print('Elegiste una opción no válida...')