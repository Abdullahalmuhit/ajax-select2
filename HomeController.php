public function SearchBookList(Request $request)
{
	return Book::where('name', 'like', '%'.$request->phrase.'%')->
	orWhere('publisher', 'like', '%'.$request->phrase.'%')
	->get();
}