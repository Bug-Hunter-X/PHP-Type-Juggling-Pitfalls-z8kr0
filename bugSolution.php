function foo(a, b) {
  if (a === null || b === null) {
    return null; 
  }
  if(a === 0 || b === 0 ){
    return a + b;
  }
  if (!is_numeric(a) || !is_numeric(b)) {
    return null; // Handle non-numeric inputs appropriately
  }
  return a + b;
}