# masteradmin

# states - id, name
# colors - id, name, hex_code
# sizes - id, name, description

# roles - id, name
# users - id, name, email, password, role_id
# customers - id, user_id, default_address_id
# addresses - id, customer_id, line_1, line_2, city, state_id, pincode, phone

# categories - id, name, slug, status(boolean)
# products - id, category_id, title, slug, description, discount, status
# product_details - id, product_id, color_id, size_id, price, stock

# wishlists - id, customer_id, product_id
# carts - id, customer_id, product_detail_id, qty