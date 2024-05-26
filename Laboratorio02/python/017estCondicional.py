#Converitremos de metros a kilomentros y a centrimetros segun lo solicite el usuario

distancia=float(input('Eescribe la catidad en metros: '))
opcion=input('\n A que lo quieres convertir?'
             '\n a. kilometros'
             '\n b. centrimetros'
             '\n c. pulgadas\n')
if opcion=='a':
    total=distancia/1000
    print('La cantidad convertida a kilometros es: ',total)

elif opcion=='b':
    total=distancia/100
    print('La cantidad convertida en centimetros es: ',total)

elif opcion=='c':
    total=(distancia*100)/2.54
    print('La cantidad convertida en pulgadas es: ',total)

else:
    print('Opcion no valida....')