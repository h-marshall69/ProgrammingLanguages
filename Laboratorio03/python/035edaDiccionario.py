diccionario = {}
diccionario['nombre'] = 'Lenin'
diccionario['edad'] = 45
diccionario['ciudad'] = 'Puno'

print(diccionario)
print('El nombre del usuario es:', diccionario['nombre'])
print('La edad del usuario es:', diccionario['edad'])
print('La ciudad del usuario es:', diccionario['ciudad'])

print('\nSe actualizarán algunos datos:\n')

diccionario['edad'] = 27
print(diccionario)

print("Eliminaremos el elemento 'ciudad' del diccionario:")
del diccionario['ciudad']
print(diccionario)

if 'nombre' in diccionario:
    print('La clave "nombre" existe en el diccionario')

if 'ciudad' in diccionario:
    print('La clave "ciudad" existe en el diccionario')
else:
    print('La clave "ciudad" no existe en el diccionario')

cantidadElementos = len(diccionario)
print('El diccionario tiene:', cantidadElementos, 'Elementos')

for clave, valor in diccionario.items():
    print(clave + " : ", valor)
