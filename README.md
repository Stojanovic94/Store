# Introduction to PHP - Store

This repository serves as an introduction to working with PHP and databases. The goal of this project is to help users understand how to create and manage a store database, including handling products and categories in a relational database system.

## Introduction

In this task, the goal is to create a database called **store** and a **product** table. Each product should have the following information:

- **ID** (which can be an auto-incrementing number)
- **name** (the product's name)
- **category** (such as electronics, clothing, food, etc.)
- **price** (in dinars or euros)

It is recommended to implement the category using foreign keys and a **categories** table for a more efficient structure.

### Database Structure

The **store** database will have at least two tables:

1. **categories** (to store product categories)
   - **category_id** (unique identifier)
   - **category_name** (name of the category, e.g., Electronics, Clothing, Food)

2. **products** (to store product details)
   - **id** (unique product identifier)
   - **name** (product's name)
   - **category_id** (foreign key referring to the categories table)
   - **price** (product price in dinars or euros)

### Steps for Creating the Database

1. **Create the Store Database**

   The first step is to create the **store** database.

2. **Create the Categories Table**

   The categories table stores the different product categories, each with a unique ID.

3. **Create the Products Table**

   The products table stores the product details and includes a foreign key to link each product to its category.

### PHP and MySQL Integration

This project will demonstrate how to connect PHP with MySQL, allowing you to perform operations like inserting, updating, deleting, and retrieving products and categories.

### Validation and Error Handling

Validation of product data, such as ensuring the price is numeric and the category exists, will be implemented. Error handling will also be added to ensure smooth functionality.

---

By completing this project, you will gain hands-on experience with PHP and MySQL integration, as well as an understanding of relational database design and product management in a store context.
