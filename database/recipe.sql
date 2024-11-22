-- 创建数据库
CREATE DATABASE IF NOT EXISTS assignment2;

-- 创建用户并设置密码
CREATE USER IF NOT EXISTS 'appuser'@'localhost' IDENTIFIED BY 'password';

-- 分配权限
GRANT USAGE ON *.* TO 'appuser'@'localhost';
GRANT ALL PRIVILEGES ON assignment2.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;

-- 使用数据库
USE assignment2;

-- 创建表 `recipe`
CREATE TABLE IF NOT EXISTS `recipe` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `description` TEXT NOT NULL,
  `cuisine` VARCHAR(50) NOT NULL,
  `dietary` VARCHAR(50) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 插入数据
INSERT INTO `recipe` (`id`, `name`, `description`, `cuisine`, `dietary`) VALUES
(1, 'Simple Green Salad', 
'Ingredients: 
- 4 cups mixed greens (arugula, spinach, lettuce)
- 1 cucumber, thinly sliced
- 1/4 cup cherry tomatoes, halved
- 1/4 red onion, thinly sliced
- 2 tbsp olive oil
- 1 tbsp balsamic vinegar
- Salt and pepper to taste.

Instruction: 
1. Wash and dry the greens thoroughly. Arrange them in a large salad bowl.
2. Add cucumber slices, cherry tomatoes, and red onion on top of the greens.
3. In a small bowl, whisk together olive oil, balsamic vinegar, salt, and pepper.
4. Drizzle the dressing over the salad and toss gently to combine.
5. Serve immediately as a side dish or light main course. Enjoy!',
'East', 'Veggie'),

(2, 'Beef Stew', 
'Ingredients:  
- 2 lbs beef chuck, cut into cubes  
- 2 tbsp olive oil  
- 3 carrots, chopped  
- 3 potatoes, cubed  
- 1 onion, diced  
- 3 garlic cloves, minced  
- 4 cups beef broth  
- 1 cup red wine (optional)  
- 2 bay leaves  
- Seasonings: salt, pepper, thyme, rosemary  

Instruction:  
1. Season beef with salt and pepper, then sear in a pot with olive oil until browned. Remove and set aside.  
2. Sauté onions and garlic in the same pot until fragrant.  
3. Add carrots, potatoes, and tomato paste. Stir well.  
4. Deglaze the pot with red wine (if using), scraping the bottom.  
5. Return beef to the pot, add broth, herbs, and bay leaves. Bring to a boil.  
6. Reduce heat, cover, and simmer for 2 hours, stirring occasionally.  
7. Remove bay leaves and adjust seasoning.  
8. Garnish with parsley and serve warm.',
'West', 'Meat'),

(3, 'Pork Chops with Apple Sauce',
'Ingredients:  
- 4 pork chops  
- 2 apples, peeled and sliced  
- 1 tbsp olive oil  
- 1/2 cup chicken broth  
- 1 tbsp honey  
- 1 tsp cinnamon  
- Salt and pepper to taste  

Instruction:  
1. Season pork chops with salt and pepper.  
2. Heat olive oil in a skillet and sear pork chops until golden brown on both sides.  
3. Remove pork chops and set aside.  
4. Add apples, chicken broth, honey, and cinnamon to the skillet. Stir well.  
5. Simmer until apples are soft, then return pork chops to the skillet.  
6. Cook for another 5 minutes, spooning apple sauce over the chops.  
7. Serve warm.',
'West', 'Meat'),

(4, 'Grilled Lemon Chicken',
'Ingredients:  
- 4 chicken breasts  
- 2 lemons, juiced  
- 2 tbsp olive oil  
- 3 garlic cloves, minced  
- 1 tsp oregano  
- Salt and pepper to taste  

Instruction:  
1. In a bowl, mix lemon juice, olive oil, garlic, oregano, salt, and pepper.  
2. Marinate chicken breasts in the mixture for 1-2 hours.  
3. Preheat grill to medium heat and cook chicken for 6-8 minutes on each side or until fully cooked.  
4. Serve with fresh lemon wedges.',
'East', 'Meat'),

(5, 'Lamb Curry',
'Ingredients:  
- 2 lbs lamb shoulder, cubed  
- 2 tbsp vegetable oil  
- 1 onion, finely chopped  
- 3 garlic cloves, minced  
- 1 tbsp ginger, minced  
- 2 cups coconut milk  
- 1 can diced tomatoes  
- 2 tbsp curry powder  
- 1 tsp cumin  
- Salt and pepper to taste  

Instruction:  
1. Heat oil in a pot and sauté onions, garlic, and ginger until fragrant.  
2. Add lamb and cook until browned.  
3. Stir in curry powder, cumin, salt, and pepper.  
4. Add tomatoes and coconut milk, then bring to a boil.  
5. Reduce heat, cover, and simmer for 1.5 hours until lamb is tender.  
6. Serve with rice or naan.',
'East', 'Meat'),

(6, 'Baked Salmon with Dill',
'Ingredients:  
- 4 salmon fillets  
- 2 tbsp olive oil  
- 1 lemon, sliced  
- 1 tsp dill, dried  
- Salt and pepper to taste  

Instruction:  
1. Preheat oven to 375°F (190°C).  
2. Place salmon fillets on a baking tray lined with parchment paper.  
3. Drizzle with olive oil, sprinkle with dill, salt, and pepper, and top with lemon slices.  
4. Bake for 15-20 minutes or until salmon is flaky and fully cooked.  
5. Serve warm with a side of vegetables or rice.',
'West', 'Meat');

