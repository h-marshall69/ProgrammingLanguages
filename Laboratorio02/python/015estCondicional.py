#El usuario indicará un numero de día y se le imprimirá el nombre de ese dia

nombre=input('Escribe tu nombre:')

dia=int(input('Escribe el numero del día que quieres venir a trabajar: '))

# asignación -- comparación

if (dia==1):

	print (f'{nombre} felicidades vendrás a trabajar el dia Lunes')

elif(dia==2):

	print (f'{nombre} felicidades vendrás a trabajar el día Martes')

elif(dia==3):

	print (f'{nombre} felicidades vendrás a trabajar el día Miércoles')

elif(dia==4):

	print (f' {nombre} felicidades vendrás a trabajar el día Jueves')

elif(dia==5):

	print (f' {nombre} felicidades vendrás a trabajar el día Viernes')

elif (dia==6):
	print (f' {nombre} felicidades vendrás a trabajar el día Sabado')

elif (dia==7):
	print (f' {nombre} felicidades vendrás a trabajar el día Domingo')
else:
	print (f' {nombre}  lo sentimos ese dia no existe...')
