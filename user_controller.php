class UserController extends Controller
{
    // Get all users
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    // Create a new user
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Set other user attributes
        $user->save();
        return redirect()->route('users.index');
    }

    // Update a user
    public function update(Request $request, $id)
    {
        $user = User

