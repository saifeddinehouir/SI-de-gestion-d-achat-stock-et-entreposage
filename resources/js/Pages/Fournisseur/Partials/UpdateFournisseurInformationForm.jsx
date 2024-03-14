import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Link, useForm, usePage } from '@inertiajs/react';
import { Transition } from '@headlessui/react';


export default function UpdateFournisseurInformationForm({ fournisseur, className = '' }) {

    const { data, setData, patch, errors, processing, recentlySuccessful } = useForm({
        nom: fournisseur.nom,
        email: fournisseur.email,
        
        telephone: fournisseur.telephone
    });

    const submit = (e) => {
        e.preventDefault();

        patch(route('fournisseur.update', fournisseur.id),{
        preserveScroll:true});
    };

    

    return (
        <section className={className}>
            <header>
                <h2 className="text-lg font-medium text-gray-900">Fournisseur Informations</h2>

                <p className="mt-1 text-sm text-gray-600">
                    View and update the fournisseur informations and email address.
                </p>
            </header>

            <form onSubmit={submit} className="mt-6 space-y-6">
                <div>
                    <InputLabel htmlFor="name" value="Name" />

                    <TextInput
                        id="nom"
                        className="mt-1 block w-full"
                        value={data.nom}
                        onChange={(e) => setData('nom', e.target.value)}
                        required
                        isFocused
                        autoComplete="nom"
                    />
                    <InputError className="mt-2" message={errors.nom} />
                </div>

                <div>
                    <InputLabel htmlFor="email" value="Email" />

                    <TextInput
                        id="email"
                        className="mt-1 block w-full"
                        value={data.email}
                        onChange={(e) => setData('email', e.target.value)}
                        required
                        autoComplete="username"
                    />
                    <InputError className="mt-2" message={errors.email} />
                </div>

               

                <div>
                    <InputLabel htmlFor="telephone" value="Telephone" />

                    <TextInput
                        id="telephone"
                        className="mt-1 block w-full"
                        value={data.telephone}
                        onChange={(e) => setData('telephone', e.target.value)}
                    />

                    <InputError className="mt-2" message={errors.telephone} />
                </div>

                <div className="flex items-center gap-4">
                    <PrimaryButton disabled={processing}>Save Changes</PrimaryButton>

                    <Transition
                        show={recentlySuccessful}
                        enter="transition ease-in-out"
                        enterFrom="opacity-0"
                        leave="transition ease-in-out"
                        leaveTo="opacity-0"
                    >
                        <p className="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
        </section>
    );
}