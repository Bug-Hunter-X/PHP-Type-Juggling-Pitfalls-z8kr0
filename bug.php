function foo(a, b) {
  if (a === null || b === null) {
    return null; //This will cause unexpected behavior if either 'a' or 'b' is 0 instead of null
  }
  return a + b;
}