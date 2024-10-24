import json
from selenium import webdriver
from selenium.webdriver.common.by import By


driver = webdriver.Chrome()

driver.get("https://github.com/luisastellet?tab=repositories")

repositorios = driver.find_elements(By.CSS_SELECTOR, 'a[itemprop="name codeRepository"]')
descricoes = driver.find_elements(By.XPATH, '//*[@itemprop="description"]')

lista_repositorios = [repo.text for repo in repositorios]

lista_links = [repo.get_attribute('href') for repo in repositorios]
# lista_descricoes = [desc.text for desc in descricoes]

print('Lista de repositórios:')
print(lista_repositorios)
print(len(lista_repositorios))

print('\n')
print('Lista de links:')
print(lista_links)
print(len(lista_links))

objetos = []    
with open('dados.json', 'w', encoding='utf-8') as f:
    for i in range(len(lista_repositorios)):
        objetos.append({
            "nome": lista_repositorios[i],
            "link": lista_links[i]
        })
    json.dump(objetos, f, ensure_ascii=False, indent=4)


driver.quit()