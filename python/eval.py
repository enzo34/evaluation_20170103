chaines = ["##",
           "#",
           "-"] # Texte à rechercher

fichier = open("question.qs","r")
for ligne in fichier:
    for chaine in chaines:
        if chaine in ligne:
            print ligne
fichier.close()
